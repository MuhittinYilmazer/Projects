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

            //break
            for($x = 0;$x < 10;$x++){
                if($x == 7){
                    echo "I have to stop, last value is = $x";
                    break;
                }
                echo $x.br;
            }

            echo "<hr>";

            //continue
            for($x = 0;$x < 20;$x++){
                if($x == 4){
                    echo "Oh! Srry you can continue also value is = $x".br;
                    continue;
                }
                echo $x.br;
            }

            echo "<hr>";

            //break-continue
            $a = 0;
            while($a < 20){
                if($a == 7){
                    echo "End is near",br;
                    $a++;
                    continue;
                }
                elseif($a == 11){
                    echo "Thank you for waiting last value is = $a".br;
                    break;
                }
                echo "$a".br;
                $a++;
            }

            ?>

        </div>

    </div>
</div>

</body>
</html>