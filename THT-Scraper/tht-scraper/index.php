<?php
require_once "simple_html_dom.php";
$arrContextOptions=array(
    //ssl kontrolunu devre disi birak
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
    //user agent tanimla
    'http' => array(
        'header' => array('User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201'),
    ),
);

//verileri cek
$site = file_get_html("https://www.turkhackteam.org/tht-yardim-merkezi/",false, stream_context_create($arrContextOptions));

//threadbits_forum_186'daki sayiyi bolumlerin table id'sine gore degistirebilirsiniz ama 22. ve 16. satirdaki kodlari degistirmeyi unutmayin
$links = $site->find("tbody[id=threadbits_forum_186] tr td[title] div a[id^=thread_title]");

//"Onemli" yazan konulari "sayisina" gore sil
for ($i = 0;$i<12;$i++) {
    unset($links[$i]);
}

//$links dizisini $link ile gez ve yazdir
foreach ($links as $link) {
    echo $link."<br>";
}
?>