<?php
require_once "simple_html_dom.php";
$arrContextOptions=array(
    //disabling ssl verifying ?
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
    //defining a user agent
    'http' => array(
        'header' => array('User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201'),
    ),
);

//CHANGE THIS URL FOR COLLECTIONS
$url = "https://shop.eminem.com/collections/mmlp20";
$url2 = "https://shop.eminem.com/";
$site = file_get_html($url,false, stream_context_create($arrContextOptions));

//names
$names = $site->find("div.image-rollover-overlay-container div.product-title");
//hrefs
$rawHref = $site->find("div.product-details a");
//sold out - shop now
$status = $site->find("div.cta");

$i = count($rawHref);

while ($i > 0){

    //separating text and href
    $href = $url2.$rawHref[$i-1]->href;
    $text = $names[$i-1]->plaintext;

    $product = "<a href='$href'>$text</a>";
    echo $product;
    echo $status[$i-1]."<br>";
    $i--;
}

?>