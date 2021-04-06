<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session example</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
    E-mail <input type="email" name="email">
    Name <input type="text" name="name">
    <input type="submit" name="submit">
</form>

<?php
//checking is there any request
if(isset($_POST["email"]) && isset($_POST["name"]) ) {

    //if there is, check the are they empty
    if(!empty($_POST["email"]) && !empty($_POST["name"]) ) {

        //if they are not set em to $_SESSION array
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["name"] = $_POST["name"];
        echo "Go to the test.php in your browser";

    }
    //if they are empty, echo this
    else{
        echo "Please fill the inputs!";
    }
}

?>

</body>
</html>
