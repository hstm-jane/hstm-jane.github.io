<?php

/*  =============================================================================
    Helpers
    ========================================================================== */

    include "includes/meta-data/_session.php";
   // include "includes/_schedule.php";
    include "includes/meta-data/_schedule.php";


/*  =============================================================================
    Actions
    ========================================================================== */

    $action = (!empty($_REQUEST['action']))?$_REQUEST['action']:null;

    switch($action){
        case 'building-add':
            $b = array(
                "status" => $_REQUEST['status'],
                "name" => $_REQUEST['name'],
                "address_1" => $_REQUEST['address_1'],
                "address_2" => $_REQUEST['address_2'],
                "city" => $_REQUEST['city'],
                "state" => $_REQUEST['state'],
                "zip" => $_REQUEST['zip'],
            );
            $response = addBuilding($b);
            break;
        case 'building-update':
            $b = array(
                "id" => $_REQUEST['id'],
                "status" => $_REQUEST['status'],
                "name" => $_REQUEST['name'],
                "address_1" => $_REQUEST['address_1'],
                "address_2" => $_REQUEST['address_2'],
                "city" => $_REQUEST['city'],
                "state" => $_REQUEST['state'],
                "zip" => $_REQUEST['zip'],
            );
            $response = updateBuilding($b);
            break;
        case 'room-add':
            $r = array(
                "status" => $_REQUEST['status'],
                "name" => $_REQUEST['name'],
                "occupancy" => $_REQUEST['occupancy'],
                "description" => $_REQUEST['description'],
                "building" => $_REQUEST['building']
            );
            $response = addRoom($r);
            break;
        case 'room-update':
            $r = array(
                "id" => $_REQUEST['id'],
                "status" => $_REQUEST['status'],
                "name" => $_REQUEST['name'],
                "occupancy" => $_REQUEST['occupancy'],
                "description" => $_REQUEST['description'],
                "building" => $_REQUEST['building']
            );
            $response = updateRoom($r);
            break;
        case 'equipment-add':
            $e = array(
                "status" => $_REQUEST['status'],
                "name" => $_REQUEST['name'],
                "contact" => $_REQUEST['contact'],
                "description" => $_REQUEST['description'],
                "building" => $_REQUEST['building'],
                "room" => $_REQUEST['room']
            );
            $response = addEquipment($e);
            break;
        case 'equipment-update':
            $e = array(
                "id" => $_REQUEST['id'],
                "status" => $_REQUEST['status'],
                "name" => $_REQUEST['name'],
                "contact" => $_REQUEST['contact'],
                "description" => $_REQUEST['description'],
                "building" => $_REQUEST['building'],
                "room" => $_REQUEST['room']
            );
            $response = updateEquipment($e);
            break;
        case 'filter':
            $building = (!empty($_REQUEST['building']))?$_REQUEST['building']:null;
            $room = (!empty($_REQUEST['room']))?$_REQUEST['room']:null;
            $hasBuilding = 0;
            $hasRoom = 0;
            $response = array(
                "buildings" => array(),
                "rooms" => array()
            );
            foreach( $_SESSION['data']['buildings'] as $b ){
                $temp = array(
                    "id" => $b['id'],
                    "name" => $b['name'],
                    "selected" => false
                );
                if ( $b['id'] === $building ) {
                    $temp["selected"] = true;
                }
                if ( $room && $_SESSION['data']['rooms'][$room]['building'] === $b['id'] ) {
                   $temp["selected"] = true;
                }
                array_push($response["buildings"],$temp);
            }
            foreach( $_SESSION['data']['rooms'] as $r ){
                $temp = array(
                    "id" => $r['id'],
                    "name" => $r['name'],
                    "selected" => false
                );
                if ( $r['id'] === $room ) {
                    $temp["selected"] = true;
                }
                if ( $building === null || $r['building'] === $building ) {
                    array_push($response["rooms"],$temp);
                }
            }
            if( $hasBuilding > 0 ){
                array_unshift($response["buildings"],array(
                    "id" => "",
                    "name" => "Choose a Building",
                    "selected" => false
                ));
            } else {
                array_unshift($response["buildings"],array(
                    "id" => "",
                    "name" => "Choose a Building",
                    "selected" => true
                ));
            }
            if( $hasRoom > 0 ){
                array_unshift($response["rooms"],array(
                    "id" => "",
                    "name" => "Choose a Room",
                    "selected" => false
                ));
            } else {
                array_unshift($response["rooms"],array(
                    "id" => "",
                    "name" => "Choose a Room",
                    "selected" => true
                ));
            }
            break;
        case 'search':
            $types = array('people','rooms','equipment','groups');
            $type = (!empty($_REQUEST['type']))?$_REQUEST['type']:false;
            $q = (!empty($_REQUEST['q']))?$_REQUEST['q']:false;
            $modal = (!empty($_REQUEST['modal']))?$_REQUEST['modal']:false;
            $response = array( 'json' => array(), 'html' => '');
            $dt = (!empty($_REQUEST['dt']))?$_REQUEST['dt']:false;
            $pp = (!empty($_REQUEST['pp']))?$_REQUEST['pp']:false;
           

            if ( in_array($type, $types) ) {
                if ( $q ) {
                    foreach ($_SESSION['data'][$type] as $item) {
                        switch($type){
                            case 'rooms':
                                $b = $_SESSION['data']['buildings'][$item['building']]['name'];
                                if (strpos(strtolower($item['name']),strtolower($q)) !== false || strpos(strtolower($b),strtolower($q)) !== false ) {
                                    array_push($response['json'], $item);
                                }
                                break;
                            case 'equipment':
                                $b = $_SESSION['data']['buildings'][$item['building']]['name'];
                                $r = (!empty($item['room']))?$_SESSION['data']['rooms'][$item['room']]['name']:'';
                                if ( strpos(strtolower($item['name']),strtolower($q)) !== false || strpos(strtolower($b),strtolower($q)) !== false || strpos(strtolower($r),strtolower($q)) !== false ) {
                                    array_push($response['json'], $item);
                                }
                                break;
                            case 'people':
                                if (strpos(strtolower($item['name']),strtolower($q)) !== false || strpos(strtolower($item['userid']),strtolower($q)) !== false ) {
                                    array_push($response['json'], $item);
                                }
                                break;
                           
                        }
                    }
                } else {
                    $response['json'] = $_SESSION['data'][$type];
                }

                if ( count($response['json']) > 0 ) {
                    foreach( $response['json'] as $item ){
                        if ( $modal ) {
                            $response['html'] .= makeModalSlat($item);
                        } else {
                            $response['html'] .= makeSlat($item);
                        }
                    }
                } else {
                    $response['html'] = '<div class="resource-picker-noresults">No results found. Try widening your search.</div>';
                }

                if ( $dt ) {
            unset($response['html']);

                    // you're going to reformat the $response['json'] node to something that your datatable can consume
     
                   $response['data'] = array
                          (
                           array(  '', json_encode($item['name']), json_encode($item['status']), json_encode($item['userid']), json_encode($item['id']), '','','')
                           
                          );
                    
                }
               if  ( $pp ) {
            unset($response['html']);

                    // you're going to reformat the $response['json'] node to something that your datatable can consume
     
                   $response['data'] = array
                          (
                           array(  '', json_encode($item['name']), json_encode($item['status']), json_encode($item['userid']), json_encode($item['id']), '')
                           
                          );
                    
                }
               
            
             }
            break;

        case 'detail':
            $id = (!empty($_REQUEST['id']))?$_REQUEST['id']:false;
            $start = (!empty($_REQUEST['start']))?$_REQUEST['start']:false;
            $end = (!empty($_REQUEST['end']))?$_REQUEST['end']:false;
            $response = array( 'json' => '', 'html' => '');
            $i = array();

            if ( $id ) {
                switch( substr($id,0,1) ) {
                    case 'B':
                        $type = 'buildings';
                        break;
                    case 'R':
                        $type = 'rooms';
                        break;
                    case 'E':
                        $type = 'equipment';
                        break;
                    case 'P':
                        $type = 'people';
                        break;
                    case 'V':
                        $type = 'events';
                        break;
                }
                foreach ($_SESSION['data'][$type] as $item) {
                    if ( $item['id'] === $id ) {
                        $i = $item;
                    }
                }

                if ( $start && $end ) {
                    $i['schedule'] = array();
                    foreach ($_SESSION['data']['bookings'] as $booking) {
                        if ( $booking['id'] === $id && $booking['start'] < $end && $booking['end'] > $start) {
                            array_push($i['schedule'], $booking);
                        }
                    }
                }
                $response['json'] = $i;
                $response['html'] = makeDetail($i);
            }
            break;

        case 'availability':
            $resources = (!empty($_REQUEST['resources']))?explode(',',$_REQUEST['resources']):false;
            $schedule = (!empty($_REQUEST['schedule']))?$_REQUEST['schedule']:false;
            $start = (!empty($_REQUEST['start']))?$_REQUEST['start']:false;
            $end = (!empty($_REQUEST['end']))?$_REQUEST['end']:false;
            $resources = array();
            $bookings = array();

            function getSchedule(){
                $now = date('U');
                return array(
                    'event' => [$now - (3600 * 2),$now + (3600 * 2)], // date range last 4hrs
                   // 'resources' => array(
                        'resources' => [[$now - (3600 * 2) - 900,$now + (3600 * 2) +900]] // 15 minutes extra before and after
                        // 'E0' => [[$now - (3600 * 2),$now + (3600 * 2)]], // added b/c of room but not needed
                        // 'E3' => [[$now - (3600 * 2),$now + (3600 * 2)]], // needed for duration of event
                        // 'P0' => [[$now - (3600 * 2),$now - (3600 * 2) + 900],[$now + (3600 * 2) - 900,$now + (3600 * 2)]], // there for 15min at start and end
                        //'G0' => [[$now - (3600 * 2),$now - (3600 * 2) + 900],[$now + (3600 * 2) - 900,$now + (3600 * 2)]] // there for 15min at start and end
                 //   ) 
                    // 'resources' => array(
                    //     'G0' => [[$now - (3600 * 2),$now - (3600 * 2) + 900],[$now + (3600 * 2) - 900,$now + (3600 * 2)]], // there for 15min at start and end
                    //     //'G1' => [[$now - (3600 * 2),$now - (3600 * 2) + 900],[$now + (3600 * 2) - 900,$now + (3600 * 2)]] // there for 15min at start and end
                    // ) 
                );
            }

            function getBookings($id) {
                foreach ( $_SESSION['data']['bookings'] as $booking ) {
                    if ( $booking['id'] === $id ) {
                        return $booking;
                    }
                }
                return false;
            }

            // use a fake schedule for testing
            if(!$schedule){
                $response['fake'] = 'true';
                $schedule = getSchedule();
            }

            if ( !empty($schedule['resources'])) {

                foreach ($schedule['resources'] as $id => $value) {
                    if ( substr($id, 0, 1) === 'R' && !empty($_SESSION['data']['rooms'][$id]) ) {
                        $resource = $_SESSION['data']['rooms'][$id];
                        $resource['equipment'] = array();
                        $bookings = getBookings($id);
                        if ( $bookings ) {
                            $resource['bookings'][] = $bookings;
                        }
                        $resources[$id] = $resource;
                    }
                }

                foreach ($schedule['resources'] as $id => $value) {
                    if ( substr($id, 0, 1) === 'E' && !empty($_SESSION['data']['equipment'][$id]) ) {
                        $resource = $_SESSION['data']['equipment'][$id];
                        $bookings = getBookings($id);
                        if ( $bookings ) {
                            $resource['bookings'][] = $bookings;
                        }
                        if ( array_key_exists($resource['room'], $resources) ) {
                            $resources[$resource['room']]['equipment'][$id] = $resource;
                        } else {
                            $resources[$id] = $_SESSION['data']['equipment'][$id];
                        }
                    }
                }

                foreach ($schedule['resources'] as $id => $value) {
                    if ( substr($id, 0, 1) === 'P' && !empty($_SESSION['data']['people'][$id]) ) {
                        $resource = $_SESSION['data']['people'][$id];
                        $bookings = getBookings($id);
                        if ( $bookings ) {
                            $resource['bookings'][] = $bookings;
                        }
                        $resources[$id] = $resource;
                    }
                }

                foreach ($schedule['resources'] as $id => $value) {
                    if ( substr($id, 0, 1) === 'G' && !empty($_SESSION['data']['groups'][$id]) ) {
                        $resource = $_SESSION['data']['groups'][$id];
                        $bookings = getBookings($id);
                        if ( $bookings ) {
                            $resource['bookings'][] = $bookings;
                        }
                        $resources[$id] = $resource;
                    }
                }

                $response['json'] = array_filter($resources);
                $response['schedule'] = $schedule;
                $response['html'] = makeHorizontalTable($schedule,array_filter($resources));
            } else {
                $response['json'] = $schedule;
                $response['html'] = '';
            }

            break;
        default:
            $response = $_SESSION['data'];
    }


/*  =============================================================================
    Return JSON
    ========================================================================== */

    header('Cache-Control: no-cache, must-revalidate');
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    header('Content-type: application/json');

    

echo json_encode($response);


?>