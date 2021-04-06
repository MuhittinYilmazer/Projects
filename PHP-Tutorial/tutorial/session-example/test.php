<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TEST!</title>
    <meta charset="UTF-8">
</head>
<body>

<?php
define("BR","<br>",true);

echo "Your E-mail: ".$_SESSION["email"].br;
echo "Your name: ".$_SESSION["name"];
?>

</body>
</html>
