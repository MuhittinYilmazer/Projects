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
        Product name: <input type="text" name="product"><br><br>
        Price: <input type="number" name="price"><br><br>
        Stock: <input type="number" name="stock"><br><br>
        ID: <input type="number" name="id"><br><br>
        <input type="submit" name="submit" value="Add"><br><br>
    </form>
</div>

<?php
$db = new PDO("mysql:host=localhost;dbname=stockManagement;","your database username","your database password");

if(isset($_POST["submit"])) {
    $product = $_POST["product"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];
    $id = $_POST["id"];

    if( !empty($product) && !empty($price) && !empty($stock)) {
        if (empty($id)) {
            $sql = $db->prepare("INSERT INTO stocks SET product=?, price=?, stock=?");
            $sql->execute(array($product,$price,$stock));
        }
        else {
            $sql = $db->prepare("INSERT INTO stocks SET product=?, price=?, stock=?, id=?");
            $sql->execute(array($product,$price,$stock,$id));
        }
        header("Refresh:2;url=add.php");

        echo "Product added";



    }
    else {
        echo "Please fill the inputs";
    }
}

?>

</body>
</html>
