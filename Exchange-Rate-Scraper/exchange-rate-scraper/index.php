<?php
require_once "simple_html_dom.php";
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
$site = file_get_html("https://dolar.tlkur.com/",false, stream_context_create($arrContextOptions));


$dollar = $site->find("span[id=USDTRY]");
$dollar = $dollar[0];

$euro = $site->find("span[id=EURTRY]");
$euro = $euro[0];

$bitcoin = $site->find("span[id=BTCUSD]");
$bitcoin = $bitcoin[0];

echo "<p style='text-align: center;font-size: 50px'>USD: ".$dollar." TL</p>";
echo "<p style='text-align: center;font-size: 50px'>Euro: ".$euro." TL</p>";
echo "<p style='text-align: center;font-size: 50px'>Bitcoin: ".$bitcoin." USD</p>";


?>