<html>
<body>


<?php
if(isset($_POST["computer"])){
    setcookie("products[0]","computer",time() + 60*60*24,"/");
    echo "Computer added to basket <br>";
}
else{
    echo "Computer did not added to basket <br>";
}
?>

<?php
if($_POST["phone"] == "on"){
    setcookie("products[1]","phone",time() + 60*60*24,"/");
    echo "Phone added to basket <br>";
}
else{
    echo "Phone did not added to basket  <br>";
}

?>

<form action="index.php" method="get">
    <input type="submit" value="Go back">
</form>

</body>
</html>