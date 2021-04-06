<html lang="tr">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="stil.css">
</head>
<body>

<div class="container">
    <div class="row">

        <div class="col-sm-12 kartım">
            <?php

            $cars = array(4234,64584,23445);

            function minmax($array){
                $info = "Min: ".min($array)."<br>"."Max: ".max($array);
                return $info;
            }

          echo minmax($cars)."<br>";
          echo "Pozitif: ".abs(-123)."<br>";
          echo "Karekök: ".sqrt(1024)."<br>";
          echo "Yuvarla: ".round(4.5001)."<br>";
          echo "Rastgele sayı: ".rand(0,100);

            ?>

        </div>

    </div>
</div>

</body>
</html>