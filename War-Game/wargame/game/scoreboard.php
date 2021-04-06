<?php
session_start();
require "../backend/connect.php";

$enemySoldier = $_SESSION["enemySoldier"];
$sql = $db->prepare("SELECT * FROM soldiers");
$sql->execute();
$numberOfSoldiers = $sql->rowCount();

if ($numberOfSoldiers == $enemySoldier){
    echo "Draw!";
}
elseif($numberOfSoldiers < $enemySoldier){
    echo "You lost!";
}
else{
    echo "You won!";
}


?>