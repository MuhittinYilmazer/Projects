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

            //define constant değerler oluşturmak için kullanılır

            /* 3. parametre case-insensitive ayarlar default olarak false tur.
             define ile tanımlandığından dolayı constanttır değişmez. */

            define ("HR","<hr>",true);

            define ("BR","<br>",true);
            echo "merhaba ".br.hr;

            //normal arraylerde içindekiler değişir
            $a = array("Merhaba","nasılsın");
            $a[0] = "Selam";
            echo $a[0].br.hr;

            //define ile yapılan arrayler constant dır yani değişmez
            define ("arabalar",["Volvo","Hyundai","Mercedes Benz"]);
            echo arabalar[1].br.hr;

            //constantlar globaldir yani bir fonksiyon oluştururken constantları kullanabiliriz.
            function test(){
                echo "What? ".br."My name is".br."Who?".hr;
            }
            test();


            ?>

        </div>

    </div>
</div>

</body>
</html>