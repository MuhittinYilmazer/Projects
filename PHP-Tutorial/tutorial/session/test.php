<?php
//if we don't start session, variables will not be set
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>

<?php
echo $_SESSION["name"];
?>

</body>
</html>