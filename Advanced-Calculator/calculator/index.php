<!DOCTYPE html>
<html lang="en">
<head>
<title>Calculator</title>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<div class="d-flex justify-content-center">

<!--making a form, setting action to php self and method to get -->
<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="number" name="number1">
    <select name="operator" >
        <option>+</option>
        <option>-</option>
        <option>x</option>
        <option>/</option>
        <option>min max</option>
        <option>random</option>
        <option>remainder</option>
    </select>
<input type="number" name="number2">
<input type="submit" name="submit" value="=">
</form>
</div>

<br>

<div class="d-flex justify-content-center">

    <!--making a form, setting action to php self and method to get -->
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="text" name="number3">
        <select name="operator2">
            <option>√</option>
            <option>round</option>
            <option>square</option>
            <option>bin to dec</option>
            <option>dec to bin</option>
        </select>
        <input type="submit" name="submit2" value="=">
    </form>
</div>

<div class="d-flex justify-content-center">
    <?php
    define("BR","<br>");

    //checking is there any request. if it exist run the code
    //for at least twice input processes
    if(isset($_GET["number1"]) && isset($_GET["number2"])){

        //defining input values to variables
        $number1 = $_GET["number1"];
        $number2 = $_GET["number2"];
        $operator = $_GET["operator"];

        //checking inputs for are they empty or valid.
        if(!empty($_GET["number1"]) && !empty($_GET["number2"])){
            //if they are valid, go on 
            switch ($operator){
                case "+":
                    echo $number1 + $number2;
                    break;

                case "-":
                    echo $number1 - $number2;
                    break;

                case "x":
                    echo $number1 * $number2;
                    break;

                case "/":
                    echo $number1 / $number2;
                    break;

                    //find the smallest and biggest number
                case "min max":
                    //if they are equal, echo they are same
                    if($number1 == $number2){
                        echo "They are same!";
                        break;
                    }
                    else {
                        echo "Min: ",min($number1, $number2)," wMax: ",max($number1, $number2);
                        break;
                    }

                    //a random number between min and max
                case "random":
                    echo rand($number1,$number2);
                    break;

                    //reamining from the division ex: 20 / 7 = 6
                case "remainder":
                    echo fmod($number1,$number2);
                    break;
            }
        }
        else{
            echo "Please fill the inputs!";
        }
    }

    //for single input processes
    if(isset($_GET["number3"])){

        //defining input values to variables
        $number3 = $_GET["number3"];
        $operator2 = $_GET["operator2"];

        if(!empty($_GET["number3"])){
            switch($operator2){

                case "√":
                    //You cant enter float number to "number" type input so I changed type to "text"
                    //but if you enter text you get an error message
                    if(filter_input(INPUT_GET, "number3", FILTER_VALIDATE_FLOAT)) {
                        //take root of the number.   Dont know is the word "root" correct :D
                        echo sqrt($number3);
                        break;
                    }
                    else{
                        echo"Not valid!";
                        break;
                    }

                    //round the float number to int
                case "round":
                    if(filter_input(INPUT_GET, "number3", FILTER_VALIDATE_FLOAT)) {
                        echo round($number3);
                        break;
                    }
                    else{
                        echo"Not valid!";
                        break;
                    }

                    //take square of the number
                case "square":
                    echo $number3 * $number3;
                    break;

                    //binary to decimal
                case "bin to dec";
                    echo bindec($number3);
                    break;

                    //decimal to binary
                case "dec to bin":
                    echo decbin($number3);
                    break;
            }
        }
        else{
            echo "Please fill the input!";
        }
    }
    ?>
</div>
</body>
</html>