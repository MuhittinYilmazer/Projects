<html lang="tr">
<head>
    <meta charset="utf-8" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="stil.css">
</head>
<body>

<div class="container">
    <div class="row">

        <div class="col-sm-12 kartım">

            <?php
            define ("BR","<br>",true);

            $cookie_name = array();
            var_dump($cookie_name);
            $cookie_value = "Araba";
            $cookie_time = 60*60*24;
            $cookie_path = "/";
            $count = 2;

            setcookie("urunler[0]","Araba",time() + $cookie_time,$cookie_path);
            setcookie("urunler[1]","Helikopter",time() + $cookie_time,$cookie_path);


            function cookieset(){
                global $count,$cookie_time,$cookie_path;
                static $count;
                setcookie("urunler[$count]", "Gemi$count", time() + $cookie_time, $cookie_path);
                $count++;
            }

            if(true){
                while($count < 15){
                    cookieset();
                    $count++;
                }
            }

             echo $_COOKIE['urunler'][0];

            ?>


        </div>

    </div>
</div>

</body>
</html>