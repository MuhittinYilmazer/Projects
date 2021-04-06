<?php
require "../backend/connect.php";
session_start();
$enemySoldier = $_SESSION["enemySoldier"];

//CHECKING IS THERE SESSIONS FOR "action" and "enemyAction"
if (isset($_SESSION["action"]) && isset($_SESSION["enemyAction"])){
    $action = $_SESSION["action"];
    $enemyAction = $_SESSION["enemyAction"];
}
else{
    $action = "";
    $enemyAction = "";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../mystyle.css">
</head>
<body>

<button class="center" style="margin-top: 10px;margin-bottom: 10px;"><a href="../index.php">Go back</a></button>

<div class="container">
    <div class="row">

        <!-- YOUR BAR -->
        <div class="col-sm-6 center">
            You <br><br>
            Soldier <button><a href="list.php">List</a></button><br>

            <?php
            //FETCHING SOLDIER COUNT
            $sql = $db->prepare("SELECT * FROM soldiers");
            $sql->execute();
            $numberOfSoldiers = $sql->rowCount();
            echo $numberOfSoldiers;
            ?>

            <br>
            Action<br>

            <?php echo $action; ?>

            <br><br>
            <!-- ACTION BUTTONS -->
            <form method="post" action="<?php echo htmlspecialchars('../backend/attack_defence.php');?>">
                <button type="submit" name="attack">Attack</button>
                <button type="submit" name="defence">Defence</button>
            </form>
        </div>

        <!-- ENEMY BAR -->
        <div class="col-sm-6 center">
            Enemy<br><br>
            Soldier<br>

            <?php echo $enemySoldier; ?>

            <br>
            Action<br>

            <?php echo $enemyAction; ?>

        </div>
    </div>
</div>


</body>
</html>