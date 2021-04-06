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
            define ("BR","<br>",true);

            /*
              operators

                important arithmetic operators

            	   $x % $y Modulus 	             // 20 % 3 = 2
             	   $x ** $y Exponentiation       // 10 ** 2 = 100

                important assignment operators

                    x += y 	x = x + y 	Addition
                    x -= y 	x = x - y 	Subtraction
                    x *= y 	x = x * y 	Multiplication
                    x /= y 	x = x / y 	Division
                    x %= y 	x = x % y   Modulus

                important comparison operators

                    $x === $y   Identical      // $x = 100; $y = "100";  var_dump($x===$y);  --> returns "bool(false)"
                    $x !== $y   Not identical  // $x = 100; $y = "100";  var_dump($x===$y);  --> returns "bool(true)"

                    $x <=> $y   Spaceship      // $x = 5;  $y = 10; echo ($x <=> $y); --> returns "-1"
                                               // $x = 10;  $y = 10; echo ($x <=> $y); --> returns "0"
                                               // $x = 15;  $y = 10; echo ($x <=> $y); --> returns "1"

                important Increment/Decrement operators

                 ++$x 	Pre-increment 	Increments $x by one, then returns $x
                 $x++ 	Post-increment 	Returns $x, then increments $x by one
                 --$x 	Pre-decrement 	Decrements $x by one, then returns $x
                 $x-- 	Post-decrement 	Returns $x, then decrements $x by one

                important logical operators

                 and 	$x and $y 	True if both $x and $y are true
                 or 	$x or $y 	True if either $x or $y is true
                 xor 	$x xor $y 	True if either $x or $y is true, but not both

                 && 	And 	$x && $y 	True if both $x and $y are true
                 || 	Or 	    $x || $y 	True if either $x or $y is true

                important string operators

                 . 	 $txt1 . $txt2  	Concatenation of $txt1 and $txt2
                 .=  $txt1 .= $txt2 	Appends $txt2 to $txt1    //$txt1 = "Hello"; $txt2 = " world"; $txt1 .= $txt2;
                 echo $txt1;  --> returns "Hello world"

                important array operators

                 +   $x + $y 	Union of $x and $y
                 ==	 $x == $y 	Returns true if $x and $y have the same key/value pairs
                 !=  $x != $y 	Returns true if $x is not equal to $y
                 === $x === $y 	Returns true if $x and $y have the same key/value pairs in the same order and of the same types
                 !=  $x != $y 	Returns true if $x is not equal to $y

              */
            ?>

        </div>

    </div>
</div>

</body>
</html>