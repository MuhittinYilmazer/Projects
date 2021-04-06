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

            //for
            for ($x = 0; $x < 20;$x++){
                echo $x.br;
            }

            echo "<hr>";

            //foreach
            $myarray = array("Red","Blue",array("Green","Yellow"));

            foreach ($myarray as $value){
                echo $value.br;
            }

            echo "<hr>";

            $myarray2 = array("Ahmet"=>"23","Mehmet"=>"24","Sude"=>"22");

            foreach ($myarray2 as $name => $age){
                echo "$name = $age".br;
            }

            ?>

        </div>

    </div>
</div>

</body>
</html>