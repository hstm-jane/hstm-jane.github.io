<?php

/*  =============================================================================
    Handle the session
    ========================================================================== */

    date_default_timezone_set('America/Chicago');

    // session_start();

    // clear session when asked
    if ( !empty($_GET['clear']) ){
        unset($_SESSION['data']);
        header('Location: /');
        exit;
    }

    // add structure to an empty session
    if ( empty($_SESSION['data']) ) {
        $_SESSION['data'] = array(
            "buildings" => array(),
            "rooms" => array(),
            "equipment" => array(),
            "people" => array(),
            "events" => array(),
            "bookings" => array(),
            "groups" => array()
        );
    }

    // prefill with data when asked
    if ( !empty($_GET['prefill']) ) {
        $_SESSION['data'] = array(
            "buildings" => array(),
            "rooms" => array(),
            "equipment" => array(),
            "people" => array(),
            "events" => array(),
            "bookings" => array(),
            "groups" => array()
        );
        defineStructure();
        defineEquipment();
        definePeople();
        defineEvents();
        defineGroups();
        header('Location: /');
        exit;
    }


/*  =============================================================================
    Content Helpers
    ========================================================================== */

    function getBuildings(){
        $buildings = $_SESSION['data']["buildings"];
        usort($buildings, function($a, $b) {
            return strcasecmp($b['id'],$a['id']);
        });
        return $buildings;
    }

    function addBuilding($b){
        $b['id'] = "B" . count($_SESSION['data']["buildings"]);
        $b['address_display'] = implode(', ',array_filter(array($b['address_1'],$b['address_2'],$b['city'],$b['state'],$b['zip'])));
        $b['modified'] = date("F j, Y") . ' at ' . date("g:ia") . ' by sjuniper';
        $_SESSION['data']["buildings"][$b['id']] = $b;
        return $b;
    }

    function updateBuilding($b){
        $b['address_display'] = implode(', ',array_filter(array($b['address_1'],$b['address_2'],$b['city'],$b['state'],$b['zip'])));
        $b['modified'] = date("F j, Y") . ' at ' . date("g:ia") . ' by sjuniper';
        $_SESSION['data']["buildings"][$b['id']] = $b;
        return $b;
    }

    function addRoom($r){
        $r['id'] = "R" . count($_SESSION['data']["rooms"]);
        $r['modified'] = date("F j, Y") . ' at ' . date("g:ia") . ' by sjuniper';
        $_SESSION['data']["rooms"][$r['id']] = $r;
        return $r;
    }
    function updateRoom($r){
        $r['modified'] = date("F j, Y") . ' at ' . date("g:ia") . ' by sjuniper';
        $_SESSION['data']["rooms"][$r['id']] = $r;
        return $r;
    }

    function getRooms($context){
        $rooms = array();
        if ( !$context["building"] ) {
            $rooms = $_SESSION['data']["rooms"];
        } else {
            foreach ($_SESSION['data']["rooms"] as $r) {
                if ($context["building"] === $r["building"]) {
                    array_push($rooms, $r);
                }
            }
        }
        usort($rooms, function($a, $b) {
            return strcasecmp($b['id'],$a['id']);
        });
        return $rooms;
    }

    function addEquipment($e){
        $e['id'] = "E" . count($_SESSION['data']["equipment"]);
        $e['modified'] = date("F j, Y") . ' at ' . date("g:ia") . ' by sjuniper';
        $_SESSION['data']["equipment"][$e['id']] = $e;
        return $e;
    }

    function updateEquipment($e){
        $e['modified'] = date("F j, Y") . ' at ' . date("g:ia") . ' by sjuniper';
        $_SESSION['data']["equipment"][$e['id']] = $e;
        return $e;
    }

    function getEquipment($context){
        $equipment = array();
        if ( !$context["building"] && !$context["room"] ) {
            $equipment = $_SESSION['data']["equipment"];
        } else {
            foreach ($_SESSION['data']["equipment"] as $e) {
                $inBuilding = ( $context["building"] === $e["building"] );
                $inRoom = ( !$context["room"] || $context["room"] === $e["room"] );
                if ( $inBuilding && $inRoom ) {
                    array_push($equipment, $e);
                }
            }
        }
        usort($equipment, function($a, $b) {
            return strcasecmp($b['id'],$a['id']);
        });
        return $equipment;
    }

    function addPerson($p){
        $p['id'] = "P" . count($_SESSION['data']["people"]);
        $p['modified'] = date("F j, Y") . ' at ' . date("g:ia") . ' by sjuniper';
        $_SESSION['data']["people"][$p['id']] = $p;
        return $p;
    }
    
    function addGroup($g){
        $g['id'] = "G" . count($_SESSION['data']["groups"]);
       // $g['modified'] = date("F j, Y") . ' at ' . date("g:ia") . ' by sjuniper';
        $_SESSION['data']["groups"][$g['id']] = $g;
        return $g;
    }

    function addEvent($v){
        $v['id'] = $vid = "V" . count($_SESSION['data']["events"]);
        $_SESSION['data']["events"][$vid] = $v;
        return $v;
    }

    function addBooking($b){
        array_push($_SESSION['data']["bookings"],$b);
        return $b;
    }


/*  =============================================================================
    Premade Content
    ========================================================================== */

    function defineStructure(){
        addBuilding(array(
            "status" => "active",
            "name" => "Northside Building",
            "address_1" => "209 10th Ave S",
            "address_2" => "",
            "city" => "Nashville",
            "state" => "TN",
            "zip" => "37203"
        ));
        addRoom(array(
            "status" => "active",
            "name" => "Room 101 North",
            "occupancy" => "",
            "description" => "",
            "building" => "B0"
        ));
        addRoom(array(
            "status" => "active",
            "name" => "Room 102 North",
            "occupancy" => "",
            "description" => "",
            "building" => "B0"
        ));
        addRoom(array(
            "status" => "active",
            "name" => "Room 103 North",
            "occupancy" => "",
            "description" => "",
            "building" => "B0",
        ));

        addBuilding(array(
            "status" => "active",
            "name" => "Southside Building",
            "address_1" => "",
            "address_2" => "",
            "city" => "",
            "state" => "",
            "zip" => ""
        ));
        addRoom(array(
            "status" => "active",
            "name" => "Room 201 South",
            "occupancy" => "",
            "description" => "",
            "building" => "B1"
        ));
        addRoom(array(
            "status" => "active",
            "name" => "Room 202 South",
            "occupancy" => "",
            "description" => "",
            "building" => "B1"
        ));
        addRoom(array(
            "status" => "active",
            "name" => "Room 203 South",
            "occupancy" => "",
            "description" => "",
            "building" => "B1"
        ));
    }

    function defineEquipment() {
        addEquipment(array(
            "status" => "active",
            "name" => "EKG TV",
            "contact" => "John Smith\nEquipment Services\n1-800-555-5555\njsmith@hca.com",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "building" => "B0",
            "room" => "R1"
        ));
        addEquipment(array(
            "status" => "active",
            "name" => "IV Pole 1",
            "contact" => "John Smith\nEquipment Services\n1-800-555-5555\njsmith@hca.com",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "building" => "B0",
            "room" => "R1"
        ));
        addEquipment(array(
            "status" => "active",
            "name" => "Crash Cart 1",
            "contact" => "John Smith\nEquipment Services\n1-800-555-5555\njsmith@hca.com",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "building" => "B0",
            "room" => ""
        ));

        addEquipment(array(
            "status" => "active",
            "name" => "Ventilator 1",
            "contact" => "John Smith\nEquipment Services\n1-800-555-5555\njsmith@hca.com",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "building" => "B1",
            "room" => "R3"
        ));

        addEquipment(array(
            "status" => "active",
            "name" => "Medication Cart 1",
            "contact" => "John Smith\nEquipment Services\n1-800-555-5555\njsmith@hca.com",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "building" => "B1",
            "room" => ""
        ));
        addEquipment(array(
            "status" => "active",
            "name" => "Medication Cart 2",
            "contact" => "John Smith\nEquipment Services\n1-800-555-5555\njsmith@hca.com",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "building" => "B1",
            "room" => ""
        ));
    }

    function definePeople() {
        addPerson(array(
            "name" => "John D Smith",
            "status" => "active",
            "userid" => "jsmith",
            "department" => "Anesthesiology",
            "institution" => "ACME Medical Corp"
        ));
         addPerson(array(
            "name" => "Davis Dolezal",
            "status" => "active",
            "userid" => "ddolezal <span class='hidden instructor-label'>Instructor</span>",
            "department" => "Pharmacy",
            "institution" => "ACME Medical Corp",
        ));
          addPerson(array(
            "name" => "Michelle Baldwin",
            "status" => "active",
            "userid" => "mbald",
            "department" => "Anesthesiology",
            "institution" => "ACME Medical Corp",
            "availability" => "Not Enrolled",
            "disabled" => "true"
        ));
          addPerson(array(
            "name" => "Marc Sexton",
            "status" => "active",
            "userid" => "msexc",
            "department" => "Nursing",
            "institution" => "ACME Medical Corp",
            "availability" => "Already Registered",
            "disabled" => "true"
        ));
        addPerson(array(
            "name" => "Demo A.Unavailable",
            "status" => "active",
            "userid" => "userID22",
            "department" => "Anesthesiology",
            "institution" => "ACME Medical Corp",
            "availability" => "Not Enrolled",
            "disabled" => "true"
        ));
        addPerson(array(
            "name" => "Demo B. Unavailable",
            "status" => "active",
            "userid" => "userID223",
            "department" => "Nursing",
            "institution" => "ACME Medical Corp",
            "availability" => "Already Registered",
            "disabled" => "true"
        ));
    }

    function defineGroups() {
        addGroup(array(
            "name" => "Nurses",
             "status" => "active",
             "userid" => "user group a"
        ));
        //  addGroup(array(
        //     "name" => "Doctors",
        //      "status" => "active",
        //      "userid" => "user group b"
        // ));
         addGroup(array(
            "name" => "Physicians",
             "status" => "active",
             "userid" => "user group c"
        ));
    }
    function defineEvents() {
        // TODO: addEvent should really encompass the event and all the resources it requires into a single function
        addEvent(array(
            "name" => "Test Event",
            "contact" => "P0",
            "start" => date('U') - (date('U') % 1800) + (3600 * -4),
            "end" => date('U') - (date('U') % 1800) + (3600 * -2)
        ));
        addBooking(array(
            "id" => "E0",
            "event" => "V0",
            "start" => date('U') - (date('U') % 1800) + (3600 * -4),
            "end" => date('U') - (date('U') % 1800) + (3600 * -2)
        ));
        addBooking(array(
            "id" => "R0",
            "event" => "V0",
            "start" => date('U') - (date('U') % 1800) + (3600 * -4),
            "end" => date('U') - (date('U') % 1800) + (3600 * -2)
        ));

        addEvent(array(
            "name" => "EKG Training Class",
            "contact" => "P0",
            "start" => "1413532800",
            "end" => "1413565200"
        ));
        addBooking(array(
            "id" => "R0",
            "event" => "V0",
            "start" => "1413532800",
            "end" => "1413565200"
        ));
        addBooking(array(
            "id" => "R3",
            "event" => "V0",
            "start" => "1413532800",
            "end" => "1413565200"
        ));
        addBooking(array(
            "id" => "E0",
            "event" => "V0",
            "start" => "1413543600",
            "end" => "1413565200"
        ));
    }

?>