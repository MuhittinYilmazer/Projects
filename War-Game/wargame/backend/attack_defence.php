<?php
require "connect.php";
session_start();

//IMPORTING ENEMY SOLDIER COUNT
$enemySoldier = $_SESSION["enemySoldier"];

//GLOBAL RULE!!!!     ATTACK = 0    DEFENCE = 1

//ENEMY ATTACK OR DEFENCE
$enemyAttackOrDefence = rand(0,1);

//YOUR ATTACK OR DEFENCE
if (isset($_POST["attack"])){
    $attackOrDefence = 0;
}
else{
    $attackOrDefence = 1;
}


//DEFENCE PROCESS
    if ($enemyAttackOrDefence == 1 && $attackOrDefence == 1){
        $action = "You defenced";
        $enemyAction = "Enemy defenced";
    }

//ATTACK PROCESS

    //ENEMY ATTACK
    if ($enemyAttackOrDefence == 0) {

        //IF YOU DEFENCE
        if ($attackOrDefence == 1) {
            //CHANCE OF ATTACK
            $enemyAttackChance = rand(0,3);

            if ($enemyAttackChance == 0){

                //KILL CHANCES
                $enemyKillChance = rand(0,9);
                if ($enemyKillChance == 0) {
                    $killedSoldier = 3;
                }
                elseif ($enemyKillChance < 3) {
                    $enemyKilledSoldier = 2;
                }
                else{
                    $enemyKilledSoldier = 1;
                }

            }
            else{
                $enemyKilledSoldier = 0;
            }
            $action = "You defenced";
        }

        //IF YOU ATTACK TOO
        else{

            //CHANCE OF ATTACK
            $enemyAttackChance = rand(0,1);
            if ($enemyAttackChance == 0) {

                //KILL CHANCES
                $enemyAttackChance = rand(0,19);
                if ($enemyAttackChance < 3){
                    $enemyKilledSoldier = 3;
                }
                if ($enemyAttackChance < 8){
                    $enemyKilledSoldier = 2;
                }
                else{
                    $enemyKilledSoldier = 1;
                }

            }
            else{
                $enemyKilledSoldier = 0;
            }
        }
        $enemyAction = "Enemy killed $enemyKilledSoldier soldier(s)";
    }

    //-----------------------------------------------------------------------

    //YOUR ATTACK
    if ($attackOrDefence == 0) {

        //ENEMY DEFENCES
        if ($enemyAttackOrDefence == 1) {
            //CHANCE OF ATTACK
            $attackChance = rand(0,3);

            if ($attackChance == 0){

                //KILL CHANCES
                $killChance = rand(0,9);
                if ($killChance == 0) {
                    $killedSoldier = 3;
                }
                elseif ($killChance < 3) {
                    $killedSoldier = 2;
                }
                else{
                    $killedSoldier = 1;
                }

            }
            else{
                $killedSoldier = 0;
            }
            $enemyAction = "Enemy defenced";
        }

        //ENEMY ATTACKS
        else{

            //CHANCE OF ATTACK
            $attackChance = rand(0,1);
            if ($attackChance == 0) {

                //KILL CHANCES
                $attackChance = rand(0,19);
                if ($attackChance < 3){
                    $killedSoldier = 3;
                }
                if ($attackChance < 8){
                    $killedSoldier = 2;
                }
                else{
                    $killedSoldier = 1;
                }

            }
            else{
                $killedSoldier = 0;
            }
        }
        $action = "You killed $killedSoldier soldier(s)";
    }

//KILLED ENEMY SOLDIERS
    $enemySoldier = $enemySoldier - $killedSoldier;
$_SESSION["enemySoldier"] = $enemySoldier;

//KILLED OURS SOLDIERS
if (isset($enemyKilledSoldier) && $enemyKilledSoldier != 0){
    while ($enemyKilledSoldier > 0){
        $sql = $db->prepare("DELETE FROM soldiers ORDER BY RAND() LIMIT 1;");
        $sql->execute();
        $enemyKilledSoldier--;
    }
}

//ACTIONS
$_SESSION["enemyAction"] = $enemyAction;
$_SESSION["action"] = $action;

//CHECKING NUMBERS OF SOLDIERS
$sql2 = $db->prepare("SELECT * FROM soldiers");
$sql2->execute();
$numberOfSoldiers = $sql2->rowCount();

if($enemySoldier <= 0 or $numberOfSoldiers <= 0){
    header("location:../game/scoreboard.php");
}
else{
    header("location:../game/game.php");
}

?>