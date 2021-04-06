<?php
require "../backend/connect.php";
require "../backend/soldier_class.php";
session_start();
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

<p class="center">How many soldiers do you want to have?</p>
<form class="center" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="number" name="soldier_request"> <button class="mybutton" type="submit" name="submit">Call</button>
</form>

<div class="center">
<?php
if (isset($_POST["submit"])) {

    $soldier_request = $_POST["soldier_request"];
    $_SESSION["enemySoldier"] = $soldier_request;

    if (isset($soldier_request) && !empty($soldier_request) && $soldier_request > 0) {
        while ($soldier_request > 0) {


            //DEFINING RANDOM NAME, LAST NAME, AGE, RANK
            $randname = array_rand($names);
            $randname = $names[$randname];

            $randlastname = array_rand($lastnames);
            $randlastname = $lastnames[$randlastname];

            $randage = rand(20, 50);

            $randrank = array_rand($ranks);
            $randrank = $ranks[$randrank];

            //GENERATING A SOLDIER
            $soldier = new Soldier($randname, $randlastname, $randage, $randrank);

            //DATABASE PROCESS
            $insert = $db->prepare("INSERT INTO soldiers SET firstname = ?, lastname = ?, age = ?,soldierrank = ?");
            $insert->execute(array($randname, $randlastname, $randage, $randrank));

            $soldier_request--;
        }
        header("location:game.php");
    }
    else{
        echo "Error!";
    }
}
?>
</div>
</body>
</html>