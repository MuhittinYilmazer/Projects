<?php
require "../backend/connect.php";
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

<button class="center" style="margin-top: 10px;margin-bottom: 10px;"><a href="game.php">Go back</a></button>

<table class="list">
    <tr>
        <th class="listheader">Number</th>
        <th class="listheader">Firstname</th>
        <th class="listheader">Lastname</th>
        <th class="listheader">Age</th>
        <th class="listheader">Rank</th>
    </tr>
    <?php
    $sql = $db->prepare("SELECT * FROM soldiers");
    $sql->execute();
    $count = 1;

    if($sql->rowCount()){
        foreach($sql as $row){
            echo "<tr>
                    <th>$count</th>
                    <th>$row[1]</th>
                    <th>$row[2]</th>
                    <th>$row[3]</th>
                    <th>$row[4]</th>
                  </tr>";
            $count++;
        }
    }

    ?>
</table>


</body>
</html>