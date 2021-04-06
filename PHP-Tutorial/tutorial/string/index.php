<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="stil.css">
</head>
<body>

<div class="container">
 <div class="row">

  <div class="col-sm-12 kartım">
      <?php
      $br = "<br>";
     function bilgi($yazi,$kelime,$repyer,$repkelime){
         global $br ;

         $yazi_uzunluk = strlen($yazi);
         $kelime_sayisi = str_word_count($yazi);
         $ters = strrev($yazi);
         $arama = strpos($yazi,$kelime);
         $replace = str_replace($repyer,"<mark>".$repkelime."</mark>",$yazi);

         $toplam = ("Yazının uzunluğu: ".$yazi_uzunluk.$br."Kelime sayısı: ".$kelime_sayisi.$br."Ters hali: "
         .$ters.$br."Aranan kelimenin pozisyonu: ".$arama.$br."Yazı: ".$yazi.$br."Replace edilmiş cümle: "
         .$replace);

         return $toplam;
     }
       echo bilgi("merhaba arkadaslar nasilsiniz ben cok iyiyim","nasilsiniz","cok","az");
      ?>
  </div>

 </div>
</div>

</body>
</html>