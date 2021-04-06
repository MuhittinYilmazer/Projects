<?php
$db = new PDO("mysql:host=localhost;dbname=yourdatabasename","username","password");
$sql = $db->prepare("INSERT INTO gameOptions SET 
minimum= ?,
maximum = ?,
operator = ?
");
if (isset($_POST["submit"])) {

    $min = $_POST["min"];
    $max = $_POST["max"];
    $operator = $_POST["operator"];

    //min
    if ( empty($min) ) {
        $min = 100;
    }

    //max
    if ( empty($max) ) {
        $max = 1000;
    }

    if ( empty($operator) ) {
        $operator = "+";
    }

    $sql->execute(array($min,$max,$operator));

    echo "<div class='center'>Settings saved<br><br></div>";
}
?>
