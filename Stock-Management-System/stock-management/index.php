<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stock Management</title>
    <link rel="stylesheet" href="stil.css">
</head>
<body class="center">
<h2>
    Stock Management System
</h2>

<button><a href="../stock-management/pages/add.php">Add</a></button>
<button><a href="../stock-management/pages/delete.php">Delete</a></button>

<br>
<br>

<table class="center" style="border: solid gray 3px; ">
    <tr>
        <th >Product</th>
        <th>Price</th>
        <th>Stock</th>
        <th>ID</th>
    </tr>
    <?php
    $db = new PDO("mysql:host=localhost;dbname=stockManagement;","your database username","your database password");
    $sql = $db->prepare("SELECT * FROM stocks");
    $sql->execute();

    if($sql->rowCount()){
        foreach($sql as $row){
            echo "<tr>
                    <th>$row[0]</th>
                    <th>$row[1]</th>
                    <th>$row[2]</th>
                    <th>$row[3]</th>
                  </tr>";
        }
    }

    ?>
</table>

<br>


</body>
</html>
