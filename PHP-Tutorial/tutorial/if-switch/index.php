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

            $clock = date("H");
            $minute = date("i");

            if ($clock < 12){
                echo "Günaydın, saat: $clock.$minute".br;
            }
            elseif ($clock < 18){
                echo "Tünaydın, saat: $clock.$minute".br;
            }
            else{
                echo "İyi akşamlar, saat: $clock.$minute".br;
            }

            $fruit = "strawberry";

            switch ($fruit){
                case "apple";
                  echo "this is an apple";
                  break;
                case "banana";
                  echo "this is an banana";
                  break;
                case "pineapple":
                  echo "this is a pineapple";
                  break;
                default:
                  echo "I don't know what is this";
                  break;
            }


            ?>

        </div>

    </div>
</div>

</body>
</html>