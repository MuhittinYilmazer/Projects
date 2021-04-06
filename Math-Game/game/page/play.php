<!DOCTYPE html>
<html lang="en">
<head>
    <title>Game</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../stil.css">
</head>
<body>

<div class="center">
    <button><a href="../index.php">Main Menu</a></button>
</div>
<br>
<?php
require_once "../controller/playController.php";
?>

<br>
<div class="center">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="number" name="yourAnswer">
        <input type="submit" name="submit">
    </form>
</div>


</body>
</html>
