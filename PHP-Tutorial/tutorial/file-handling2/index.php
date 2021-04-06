<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
define("BR","<br>",true);
//fopen() is used for open a file but if file doesn't exist it can create a file
$file = fopen("mytext.txt","w");
//mytext.txt file created by above code line

//fwrite() function is used to write to a file. First parameter is name of file to write to and
//second parameter is the string to be written
$name = "James";
fwrite($file,$name);
$name = "Sam";
fwrite($file,$name);
//closing file
fclose($file);
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select an image:
    <input type="file" name="image" id="image">
    <input type="submit" name="submit">

</form>
</body>
</html>