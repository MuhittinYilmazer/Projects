<?php
//starting session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session</title>
</head>
<body>

<?php
define("BR","<br>",true);

$_SESSION["name"] = "Karen ";
$_SESSION["surname"] = "Brown";
echo $_SESSION["name"];
echo $_SESSION["surname"].br;
echo "Go to the test.php in your browser";
?>

</body>
</html>