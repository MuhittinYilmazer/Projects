<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stock Management</title>
    <link rel="stylesheet" href="../stil.css">
</head>
<body class="center">
<h2>
    Stock Management System
</h2>

<button><a href="../index.php">Go back</a></button><br><br>

<div class="center">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        ID: <input type="number" name="id"><br><br>
        <input type="submit" name="submit" value="Delete"><br><br>
    </form>
</div>

<?php
$db = new PDO("mysql:host=localhost;dbname=stockManagement;","your database usernam","your database password");
$sql = $db->prepare("SELECT * FROM stocks");
$sql->execute();

if(isset($_POST["submit"]) ) {
    $id = $_POST["id"];

    if (!empty($id) ) {
        $sql = $db->prepare("DELETE FROM stocks WHERE id=?");
        $sql->execute(array($id));
        echo "Product deleted";

    }
    else {
        echo "Please enter id";
    }
}

?>

</body>
</html>
