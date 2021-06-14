<?php
//PROXY SETTINGS
$PROXY_HOST = "111.111.111.111";
$PROXY_PORT = "8080";
$PROXY_USER = "LOGIN";    // Username
$PROXY_PASS = "PASSWORD";   // Password

$arrContextOptions = array(
    //disabling ssl verifying
    "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false,
    ),

    'http' => array(
        //IF YOU WANT TO USE PROXY UNCOMMENT THIS 2 LINE
        //'proxy' => "tcp://$PROXY_HOST:$PROXY_PORT",
        //'request_fulluri' => true,

        //IF PROXY REQUIRES AUTHENTICATION UNCOMMENT BELOW LINE
        //'header' => "Proxy-Authorization: Basic $auth"
    ),
);

//SEARCH WORD
$word = "car";
//WANTED PHOTO
$wanted = 300;
$scraped = 0;
$page_num = 1;

while ($scraped < $wanted) {

    $url = "https://unsplash.com/napi/search/photos?query=" . $word . "&per_page=30&page=" . $page_num;
    $site = file_get_contents($url, false, stream_context_create($arrContextOptions));
    $site = json_decode($site, true);

    $total_photo = $site['total'];

    if($total_photo < $wanted){
        $wanted = $total_photo;
    }

    $photo_arrays = $site['results'];

    foreach ($photo_arrays as $post_array) {
        $link = $post_array['urls']['full'];
        echo $link . "<br>";
        $scraped++;
        if ($scraped >= $wanted) {
            break;
        }
    }
    $page_num++;
}

//STATS 
echo "Wanted: ".$wanted."<br>";
echo "Scraped: ".$scraped."<br>";
echo "Total request: ".$page_num."<br>";

?>
