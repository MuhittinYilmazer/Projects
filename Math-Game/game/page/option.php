<!DOCTYPE html>
<?php
require "../controller/optionController.php";

?>


<html lang="en">
<head>
    <title>Game Options</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/game/stil.css">
</head>
<body>
<div class="center">
    <button class="center"><a href="/game/index.php">Main Menu</a></button>
</div>

<br>
<p class="center">Note: Empty inputs will be set by default </p>
<p class="center">Random question</p>

<div class="center">

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Min: <input type="number" name="min">
        Max: <input type="number" name="max">

        <select name="operator">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>

        <br>
        <br>

        <div class="center">
            <input type="submit" name="submit" value="Save">
        </div>

    </form>

</div>


</body>
</html>