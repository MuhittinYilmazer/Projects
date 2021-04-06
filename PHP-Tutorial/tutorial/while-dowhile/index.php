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


            //while
           $numberconst = 0;
           $number = 2;
           $numberconst = $number;

           $defa = 9;
           $yapılan = 0;

           while ($yapılan < $defa ){

               echo $number.br;
               $yapılan++;
               $number = $number*$numberconst;
           }

            echo "<hr>";

           //do-while
           $sayi = 0;

            do{
                echo $sayi.br;
                $sayi++;

            } while($sayi < 10);


           






            ?>

        </div>

    </div>
</div>

</body>
</html>