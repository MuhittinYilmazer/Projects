<?php
require "backend/connect.php";
session_start();
session_destroy();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>War Game</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>

<div class="center">
<button><a href="game/soldier_generator.php">Play</a></button>
<br><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <button type="submit" name="submit">Reset</button>
</form>

<?php
if(isset($_POST["submit"])){
    $sql = $db->prepare("DELETE FROM soldiers");
    $sql->execute();

    echo "Database is clear";
}
?>
</div>
</body>
</html>