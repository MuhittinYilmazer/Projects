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

            //float to int
            function add(float $a,float $b){
             return (int) ($a + $b).br;
            }

            echo add(4.2,123.4);

            //float to int 2
            function add2(float $a,float $b):int{
                return ($a+$b);
            }

            echo add2(143.32,123.1234).br;

            function add3(float $a,float $b){
                return $a+$b;
            }

            echo add3(43.23,23.54);
            ?>

        </div>

    </div>
</div>

</body>
</html>