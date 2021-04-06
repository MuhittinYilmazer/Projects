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

            //indexed arrays
            $cars = array("Mercedes","BMW","Volvo");
            echo "the third car is: ".$cars[2].br;
            echo "number of elements: ".count($cars).br;

            $cars[2] = "Toyota";

            foreach($cars as $car){
                echo $car.br;
            }

            echo "<hr>";

            //associative arrays
            $phone = array("İphone"=>"12.000 TL","Samsung"=>"8.500 TL","Xiaomi"=>"3.000 TL");

            foreach($phone as $brand => $price){
                echo "Phone: $brand $price".br;
            }
            echo $phone["İphone"].br."<hr>";


            //multidimesional array
            $mycars = array(array("BMW","In stock: 10"),array("Lamborghini","In stock: 32"));

            for($row = 0;$row < 2;$row++){
                echo "<b>Row $row</b>".br;
                echo "<ul>";
                    for($column = 0;$column < 2;$column++){
                        echo "<li>".$mycars[$row][$column]."</li>".br;
                    }
                echo "</ul>";
            }
            echo "<hr>";

            //sorting array
            /*
             sort() - sort arrays in ascending order
             rsort() - sort arrays in descending order
             asort() - sort associative arrays in ascending order, according to the value
             ksort() - sort associative arrays in ascending order, according to the key
             arsort() - sort associative arrays in descending order, according to the value
             krsort() - sort associative arrays in descending order, according to the key
            */

              //sorting by alphabetic
            $cars = array("BMW","Hyundai","Passat","Audi");
            sort($cars);
            echo "Sorting by alphabetic:".br;
            foreach($cars as $car){
                echo $car.br;
            }

              //sorting by numeric
            $numbers = array(23,534,213,423,32);
            sort($numbers);
            echo "Sorting by numeric:".br;
            foreach($numbers as $number){
                echo $number.br;
            }

            //sorting reverse by alphabetic
            $cars = array("BMW","Hyundai","Passat","Audi");
            rsort($cars);
            echo "Sorting reverse by alphabetic:".br;
            foreach($cars as $car){
                echo $car.br;
            }

            //sorting reverse by numeric
            $numbers = array(23,534,213,423,32);
            rsort($numbers);
            echo "Sorting reverse by numeric:".br;
            foreach($numbers as $number){
                echo $number.br;
            }

            echo "<hr>";

            //sorting associative array by numeric
            $names = array("Zehra"=>"23","Ahmet"=>"48","Muhittin"=>"32");
            asort($names);
            echo "Sorting associative array by numeric:".br;
            foreach($names as $name => $age){
                echo "Name: $name Age: $age".br;
            }

            //sorting associative array by alphabetic
            $names = array("Zehra"=>"23","Ahmet"=>"48","Muhittin"=>"32");
            ksort($names);
            echo "Sorting associative array by alphabetic:".br;
            foreach($names as $name => $age){
                echo "Name: $name Age: $age".br;
            }

            //sorting reverse associative array by numeric
            $names = array("Zehra"=>"23","Ahmet"=>"48","Muhittin"=>"32");
            arsort($names);
            echo "Sorting reverse associative array by numeric:".br;
            foreach($names as $name => $age){
                echo "Name: $name Age: $age".br;
            }

            //sorting reverse associative array by alphabetic
            $names = array("Zehra"=>"23","Ahmet"=>"48","Muhittin"=>"32");
            krsort($names);
            echo "Sorting reverse associative array by alphabetic:".br;
            foreach($names as $name => $age){
                echo "Name: $name Age: $age".br;
            }
            ?>

        </div>

    </div>
</div>

</body>
</html>