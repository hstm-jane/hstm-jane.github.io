<?php

/*  =============================================================================
    Load Time: Start
    =========================================================================  */

    $time = microtime();
    $time = explode(' ', $time);
    $time = $time[1] + $time[0];
    $start = $time;


/*  =============================================================================
    Variables
    =========================================================================  */

    $callback = (!empty($_GET['callback']))?$_GET['callback']:false;
    $id = (!empty($_GET['id']))?intval($_GET['id']):0;
    $response = array(
        'info' => array(),
        'nav' => '',
        'results' => '',
        'count' => ''
    );


/*  =============================================================================
    Dummy Data
    =========================================================================  */

    $categories[] = array('id'=>0,'parent'=>null,'name'=>'Categories','count'=>250);
        $categories[] = array('id'=>1,'parent'=>0,'name'=>'CE Center','count'=>160);
            $categories[] = array('id'=>2,'parent'=>1,'name'=>'Programs','count'=>80);
                $categories[] = array('id'=>3,'parent'=>2,'name'=>'CCRN: Adult','count'=>18);
                $categories[] = array('id'=>4,'parent'=>2,'name'=>'CCRN: Neonatal','count'=>22);
                $categories[] = array('id'=>5,'parent'=>2,'name'=>'CCRN: Pediatric','count'=>14);
                $categories[] = array('id'=>6,'parent'=>2,'name'=>'CDE: Diabetes Educator','count'=>26);

            $categories[] = array('id'=>7,'parent'=>1,'name'=>'Specialties','count'=>80);
                $categories[] = array('id'=>8,'parent'=>7,'name'=>'Advanced Practice','count'=>26);
                $categories[] = array('id'=>9,'parent'=>7,'name'=>'Ambulatory Care','count'=>18);
                $categories[] = array('id'=>10,'parent'=>7,'name'=>'Assisted Living','count'=>23);
                $categories[] = array('id'=>11,'parent'=>7,'name'=>'Cardiology','count'=>13);

        $categories[] = array('id'=>12,'parent'=>0,'name'=>'InService Center','count'=>90);
            $categories[] = array('id'=>13,'parent'=>12,'name'=>'Abbot','count'=>13);
            $categories[] = array('id'=>14,'parent'=>12,'name'=>'Amnisure','count'=>17);
            $categories[] = array('id'=>15,'parent'=>12,'name'=>'Bard Medical','count'=>11);
            $categories[] = array('id'=>16,'parent'=>12,'name'=>'Convatec','count'=>19);
            $categories[] = array('id'=>17,'parent'=>12,'name'=>'Gambro','count'=>12);
            $categories[] = array('id'=>18,'parent'=>12,'name'=>'GE Healthcare','count'=>18);


/*  =============================================================================
    Prepare Response
    =========================================================================  */

    function makeSlat($name){
        $html = '
        <div class="slat">
        <div class="slat-default">
        <div class="title"><form><a href="#">{name}</a></form></div>
        <ul class="meta">
        <li><span class="meta-type">Course</span></li>
        <li><span class="meta-label">Est. Time:</span><span class="meta-value">30m</span></li>
        </ul>
        <a class="btn btn-sm btn-default" href="#">Info <i class="fa fa-fw fa-chevron-right visible-xs"></i></a>
        </div>
        </div>
        ';
        return str_replace('{name}', $name, $html);
    }

    function makeCategory($id,$category){
        $html = '
        <li class="cs-item">
        <a href="#" data-id="{id}">
        <div class="cs-col">{category}</div>
        <div class="cs-col cs-col-icon"><i class="fa fa-chevron-right"></i></div>
        </a>
        <div class="cs-level">
        <h2>{category}</h2>
        <a href="#" class="cs-back"><i class="fa fa-chevron-left"></i>Back</a>
        <ul></ul>
        </div>
        </li>
        ';
        $html = str_replace('{id}', $id, $html);
        $html = str_replace('{category}', $category, $html);
        return $html;
    }

    $parent = '';
    $count = '';
    $categories_html = '';

    foreach ($categories as $c) {
        if ( $c['id'] === $id ) {
            $parent = $c['name'];
            $count = $c['count'];
        }
        if ( $c['parent'] === $id ) {
            $categories_html .= makeCategory($c['id'],$c['name']);
        }
    }

    $response['nav'] = $categories_html;
    $response['count'] = $count;

    $i = 1;
    $results_html = '';
    do {
        $results_html .= makeSlat($parent . ' Example ' . $i);
        $i++;
    } while ( $i <= 10);
    $response['results'] = $results_html;



/*  =============================================================================
    Load Time: Stop
    =========================================================================  */

    $time = microtime();
    $time = explode(' ', $time);
    $time = $time[1] + $time[0];
    $finish = $time;
    $total_time = round(($finish - $start), 4);


/*  =============================================================================
    Return the client's nonce, user's ip, and HG specialties (if permitted)
    ========================================================================== */


    $response['info']['id'] = $id;
    $response['info']['time'] = $total_time.' seconds';


    header('Cache-Control: no-cache, must-revalidate');
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    header('Content-type: application/json');

    $json = json_encode($response);
    $jsonp = $callback . '(' . $json . ')';

    if ($callback) {
        echo $jsonp;
    } else {
        echo $json;
    }


?>