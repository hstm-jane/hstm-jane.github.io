<?php

function getChangelog(){

    // REQUIRE MARKDOWN PROCESSOR
    include_once 'parsedown.php';
    $Parsedown = new Parsedown();

    // GITHUB API INFO
    $username = 'marcsexton';
    $token = '32bb478d4eab6c5dbdaf6240dbd9883cc65dab4d';
    $url = 'https://api.github.com/repos/healthstream/UIL/releases';

    // CURL API FOR RELEASE INFO
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, "$username:$token");
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERAGENT, 'healthstream.github.api');
    $output = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);

    // GET RECENT RELEASES
    $limit = 10;
    $releases = array();
    foreach ( json_decode($output) as $release ) {
        if ( $limit > 0 ) {
            array_push(
                $releases,
                array(
                    'version' => $release->tag_name,
                    'published' => $release->published_at,
                    'notes' => $Parsedown->text($release->body)
                )
            );
            $limit--;
        }
    }

    return $releases;
};

?>
