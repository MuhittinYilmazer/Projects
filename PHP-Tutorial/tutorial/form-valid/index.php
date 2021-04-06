<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form validation</title>
</head>
<body>
<?php
define("BR","<br>",true);
function secure($input){
    //removes back slashes '\'
    $input = stripslashes($input);
    //removes unnecessary characters like 'unnecessary(space,line)'
    $input = trim($input);
    //convert special characters to HTML entities
    $input = htmlspecialchars($input);
    return $input;
}

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $name =   secure($_POST["name"]);
    $email =  secure($_POST["email"]);
    $gender = secure($_POST["gender"]);
}

?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h2>Secure form ex.</h2>
    Name: <input type="text" name="name"><br>
    E-mail: <input type="email" name="email"><br>
    Gender: <input type="radio" name="gender" value="F  emale">Female
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Other">Other
    <input type="submit" name="submit">
</form>
<br>
<?php
if(isset($_POST["submit"])){
    echo "Your name: ".$name.br;
    echo "Your email: ".$email.br;
    echo "Your gender: ".$gender.br;
}
?>
</body>
</html>