<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=yourdatabasename","username","password");
} catch ( PDOException $e ) {
    echo "Error connecting database <br>";
    print $e->getMessage();
}
$sql = $db->prepare("CREATE TABLE gameOptions(
    id int NOT NULL AUTO_INCREMENT,
    minimum int NOT NULL,
    maximum int NOT NULL,
    operator varchar(1) NOT NULL,
    PRIMARY KEY (id)
)");
$sql2 = $db->prepare( "CREATE TABLE answerController(
    id int NOT NULL AUTO_INCREMENT,
    realanswer int NOT NULL,
    PRIMARY KEY (id)
)");

try {
    $sql->execute();
    $sql2->execute();
    echo "Success!";

} catch (PDOException $e1 ) {
    print $e1->getMessage();
}

?>
