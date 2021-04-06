<!DOCTYPE html>
<html lang="en">
<head>
    <title>Factorial</title>
    <meta charset="UTF-8">
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
   Number <input type="number" name="number1">
    <input type="submit">
</form>

<?php
//defining factorial function
function factorial($number){
    $total = 1;
    do{
        $total = $total * $number;
        $number--;
    }while ($number > 0);

    return $total;
}

//checking for is there any request
if( isset($_POST["number1"]) ) {

    //defining $_POST["number1"] value to $number1
    $number1 = $_POST["number1"];

    //checking if $number1 is empty
    if ( !empty($number1) ) {
        echo "Answer: ".factorial($number1);
    }
    else {
        echo "Please fill the input!";
    }
}

?>

</body>
</html>