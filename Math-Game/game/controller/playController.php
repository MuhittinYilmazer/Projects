<?php


$db = new PDO("mysql:host=localhost;dbname=yourdatabasename","username","password");
$sql = $db->prepare("SELECT * FROM gameOptions ORDER BY id DESC LIMIT 1");
$sql->execute();
$data = $sql->fetch();

$questionMinimum = $data["minimum"];
$questionMaximum = $data["maximum"];
$questionOperator = $data["operator"];

$questionComponent1 = rand($questionMinimum,$questionMaximum);
$questionComponent2 = rand($questionMinimum,$questionMaximum);

$question = $questionComponent1." ".$questionOperator." ".$questionComponent2;

switch ($questionOperator) {
    case "+":
        $realAnswer = $questionComponent1 + $questionComponent2;
        break;
    case "-":
        $realAnswer = $questionComponent1 - $questionComponent2;
        break;
    case "*":
        $realAnswer = $questionComponent1 * $questionComponent2;
        break;
    case "/":
        $realAnswer = $questionComponent1 / $questionComponent2;
        break;
}

$sql2 = $db->prepare("INSERT INTO answerController SET realanswer = ?");
$sql2->execute(array($realAnswer));

if(isset($_POST["submit"]) ) {

    $sql3 = $db->prepare("SELECT * FROM answerController ORDER BY id DESC LIMIT 1, 2");
    $sql3->execute();
    $data2 = $sql3->fetch();

    $yourAnswer = $_POST["yourAnswer"];

    if ($yourAnswer == $data2["realanswer"]) {
        echo "<div class='center'>True</div><br>";
    }
    else {
        echo "<div class='center'>Answer was: ".$data2['realanswer']."</div><br>";
    }

    $sql4 = $db->prepare("DELETE FROM answerController ORDER BY id ASC LIMIT 1");
    $sql4->execute();

}

echo '<div class="center">'.$question."</div>";



//$sql2 = $db->prepare("INSERT INTO answerController SET realanswer = ?");
//$sql2->execute(array($realAnswer));
?>
