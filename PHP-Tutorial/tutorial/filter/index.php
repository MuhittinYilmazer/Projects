<!DOCTYPE html>
<html lang="en">
<head>
    <title>Filter</title>
    <meta charset="UTF-8">
</head>
<body>

<?php
define("BR","<br>",true);

$str = "<h1>This is a h1 text</h1>";
//FIlTER_SANITIZE_STRING removes html tags from string
//first parameter is the our variable, second the type of check process
$filteredstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $filteredstr.br;

$int = "2rf";
$int2 = 54;
//filtering
$filteredint = filter_var($int, FILTER_VALIDATE_INT);
$filteredint2 = filter_var($int2, FILTER_VALIDATE_INT);

//empty
echo $filteredint.br;

echo $filteredint2.br;

//example of other types of check parameter
$ip = "192.168.1.1";
$url = "https://google.com";
$email = "myadress@gmail.com";
$filteredip = filter_var($ip,FILTER_VALIDATE_IP);
$filteredurl = filter_var($url, FILTER_VALIDATE_URL);
$filteredemail = filter_var($email, FILTER_VALIDATE_EMAIL);
echo $filteredip.br;
echo $filteredurl.br;
echo $filteredemail.br;
?>

</body>
</html>