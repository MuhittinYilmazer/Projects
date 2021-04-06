<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=wargame","muhittin","root");
} catch ( PDOException $e ){
    print $e->getMessage();
}
?>