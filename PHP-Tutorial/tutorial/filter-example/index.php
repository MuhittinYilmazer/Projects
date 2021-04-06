<!DOCTYPE html>
<html lang="en">
<head>
    <title>Filter example</title>
    <meta charset="UTF-8">
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" >
    Please enter a int <input type="text" name="int">
    Please enter a float <input type="text" name="float">
    Please enter a email <input type="text" name="email">
    <input type="submit" name="submit">
</form>

<?php
define("BR","<br>",true);

//is there any request, check it
if( isset($_POST["int"]) && isset($_POST["float"]) && isset($_POST["email"]) ) {

    //if there is, define the variables
    $int = $_POST["int"];
    $float = $_POST["float"];
    $email = $_POST["email"];

    //if variables are empty, echo "please fill inputs" otherwise go on
    if ( !empty($int) && !empty($float) && !empty($email) ) {

        //filtering variables
        $int = filter_var($int, FILTER_VALIDATE_INT);
        $float = filter_var($float, FILTER_VALIDATE_FLOAT);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);

        //if filtered variables are not valid filter returns empty variable so I wrote this
        if ( empty($int)) {
            echo "Int is not valid".br;
        }
        else {
            echo "Int is valid".br;
        }

        if ( empty($float)) {
            echo "Float is not valid".br;
        }
        else {
            echo "Float is valid".br;
        }

        if ( empty($email)) {
            echo "Email is not valid".br;
        }
        else {
            echo "Email is valid".br;
        }

    }
    else{
        echo "Please fill the inputs!";
    }
}
?>

</body>
</html>